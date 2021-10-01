import uuid

from django.contrib.auth.models import AbstractUser
from django.core.validators import validate_email
from django.db import models
from django.utils.translation import gettext_lazy as _

from users.managers import UserManager


class User(AbstractUser):
    """Basic user model to store customer (lead, customer) and staff users"""

    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    email = models.EmailField(
        _("Email address"), blank=False, null=True, unique=True, validators=[validate_email]
    )  # Add validator to check valid emails
    first_name = models.CharField(max_length=200, blank=True, null=True)
    last_name = models.CharField(max_length=200, blank=True, null=True)
    commercial_info = models.BooleanField(default=False)

    # Attribute to exclude user if has been already award-winning
    award_winning = models.BooleanField(default=False)

    # Fields required to create django admin superuser
    REQUIRED_FIELDS = ["first_name", "last_name"]
    USERNAME_FIELD = "email"

    # Custom manager to override superuser command
    objects = UserManager()

    def __str__(self):
        """Parse str object to avoid null errors"""
        return self.email
