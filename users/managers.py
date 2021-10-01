import random

from django.contrib.auth.models import UserManager as DjangoUserManager


class UserManager(DjangoUserManager):
    """Custom manager to override default manager in order to add normal and staff users using the email and or phone
    as username"""

    def _create_user(self, email, password, **extra_fields):
        """Create the user using their phone number if email is not provided"""
        if not email:
            raise ValueError("The given email must be set")
        email = self.normalize_email(email)

        user = self.model(username=email, email=email, **extra_fields)
        user.set_password(password)
        user.save(using=self._db)
        return user

    def create_user(self, email=None, password=None, **extra_fields):
        extra_fields.setdefault("is_staff", False)
        extra_fields.setdefault("is_superuser", False)
        return self._create_user(email, password, **extra_fields)

    def create_superuser(self, email=None, password=None, **extra_fields):
        extra_fields.setdefault("is_staff", True)
        extra_fields.setdefault("is_superuser", True)

        if extra_fields.get("is_staff") is not True:
            raise ValueError("Superuser must have is_staff=True.")
        if extra_fields.get("is_superuser") is not True:
            raise ValueError("Superuser must have is_superuser=True.")

        return self._create_user(email, password, **extra_fields)

    def get_by_natural_key(self, username):
        return self.get(**{self.model.USERNAME_FIELD: username.lower()})

    def get_random_users(self, number_of_emails=1):
        user_data = list(self.filter(is_staff=False, is_superuser=False, award_winning=False).distinct("email").values_list("email", flat=True))
        return random.sample(user_data, k=min(len(user_data), max(0, number_of_emails)))
