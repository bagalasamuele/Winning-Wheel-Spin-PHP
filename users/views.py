from django.contrib.auth import get_user_model
from rest_framework import viewsets, permissions

from users.serializers import UserSerializer, UserCreateSerializer

User = get_user_model()


class UserViewSet(viewsets.ModelViewSet):
    """Users endpoints to get private data"""

    serializer_class = UserSerializer
    permission_classes = (permissions.AllowAny,)
    queryset = User.objects.all()
    http_method_names = ["post"]

    def get_serializer_class(self):
        if self.action == "create":
            return UserCreateSerializer
        return self.serializer_class
