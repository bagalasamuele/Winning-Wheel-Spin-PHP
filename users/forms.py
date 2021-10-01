from django.contrib.auth import get_user_model
from django.contrib.auth.forms import \
    UserCreationForm as DjangoUserCreationForm

User = get_user_model()


class UserCreationForm(DjangoUserCreationForm):
    class Meta:
        model = User
        fields = (
            "email",
            "first_name",
            "last_name",
        )

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields["email"].required = True
        self.fields["first_name"].required = True
        self.fields["last_name"].required = True

    def clean_email(self):
        email = self.cleaned_data["email"]
        return email.lower()

    def save(self, commit=True):
        user = super().save(commit=False)
        user.username = user.email
        user.save()
        return user
