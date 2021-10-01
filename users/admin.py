from django.contrib import admin
from django.contrib.auth import get_user_model
from django.contrib.auth.admin import UserAdmin as DjangoUserAdmin
from django.utils.translation import gettext_lazy as _

from users.forms import UserCreationForm

User = get_user_model()


@admin.register(User)
class UserAdmin(DjangoUserAdmin):
    add_form = UserCreationForm
    list_display = (
        "email",
        "first_name",
        "last_name",
        "award_winning"
    )

    add_fieldsets = (
        (
            None,
            {
                "classes": ("wide",),
                "fields": ("email", ("first_name", "last_name"), "password1", "password2"),
            },
        ),
    )

    fieldsets = (
        (
            _("Personal info"),
            {
                "fields": (
                    ("first_name", "last_name"),
                    ("email", "award_winning"),
                )
            },
        ),
        (_("Important dates"), {"fields": ("last_login", "date_joined", )}),
        (_("Permissions"), {"fields": ("is_active",)}),
        (
            _("Django Admin Permissions"),
            {"classes": ("collapse",), "fields": ("is_staff", "is_superuser", "groups", "user_permissions")},
        ),
        (
            None,
            {"fields": ("username", "password", )},
        ),
    )