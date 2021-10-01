from django.contrib.auth import get_user_model
from django.core.management import BaseCommand

User = get_user_model()


class Command(BaseCommand):
    """Get award-winning users"""
    help = "Get a list of award winning users and update them in database before list them"

    def add_arguments(self, parser):
        parser.add_argument("number_of_users", nargs="?", type=int, default=1)

    def handle(self, *args, **options):
        user_emails = User.objects.get_random_users(number_of_emails=options["number_of_users"])

        if user_emails:
            # Update them in database
            User.objects.filter(email__in=user_emails).update(award_winning=True)
            print("Users: ", user_emails)
