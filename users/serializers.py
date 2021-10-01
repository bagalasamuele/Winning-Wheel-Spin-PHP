from django.contrib.auth import get_user_model
from rest_framework import serializers

from users.utils import StringErrorsMixin

User = get_user_model()


class UserSerializer(serializers.ModelSerializer):
    """Serializer to get default data from users on simple GET"""

    class Meta:
        model = User
        exclude = (
            "username",
            "password",
            "last_login",
            "is_superuser",
            "is_staff",
            "is_active",
            "groups",
            "user_permissions",
        )


class UserCreateSerializer(StringErrorsMixin, serializers.ModelSerializer):
    class Meta:
        model = User
        fields = (
            "first_name",
            "last_name",
            "email",
            "commercial_info"
        )
        extra_kwargs = {"first_name": {"required": True, "allow_null": False, "allow_blank": False},
                        "last_name": {"required": False, "allow_null": True, "allow_blank": True},
                        "email": {"required": True, "allow_null": False, "allow_blank": False}}

    def create(self, validated_data):
        validated_data["username"] = validated_data["email"]
        return super(UserCreateSerializer, self).create(validated_data)
