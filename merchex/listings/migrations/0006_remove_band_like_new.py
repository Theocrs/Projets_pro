# Generated by Django 5.0.6 on 2024-06-18 15:21

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('listings', '0005_band_like_new'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='band',
            name='like_new',
        ),
    ]
