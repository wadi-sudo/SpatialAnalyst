# Generated by Django 3.1.4 on 2022-09-12 12:54

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('geoApp', '0003_cafe_fastfood_food_restaurant'),
    ]

    operations = [
        migrations.DeleteModel(
            name='Poi',
        ),
        migrations.DeleteModel(
            name='Road',
        ),
        migrations.DeleteModel(
            name='TunAdm1',
        ),
        migrations.DeleteModel(
            name='TunAdm2',
        ),
    ]
