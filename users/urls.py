from rest_framework.routers import DefaultRouter

from users.views import UserViewSet

router = DefaultRouter()
router.register("users", UserViewSet, basename="users")

# Override internal auth urlpatterns with user viewset methods
urlpatterns = [] + router.urls

# Needed to add namespace in backoffice_api urls.py
app_name = "users"
