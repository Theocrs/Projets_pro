# Generated by Django 5.0.6 on 2024-06-25 14:14

import django.utils.timezone
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('main', '0003_alter_article_publication_date'),
    ]

    operations = [
        migrations.AlterField(
            model_name='article',
            name='publication_date',
            field=models.DateTimeField(default=django.utils.timezone.now),
        ),
    ]