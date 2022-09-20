# Generated by Django 3.1.4 on 2022-09-08 13:17

import django.contrib.gis.db.models.fields
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('geoApp', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='AuthGroup',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=150, unique=True)),
            ],
            options={
                'db_table': 'auth_group',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthGroupPermissions',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
            ],
            options={
                'db_table': 'auth_group_permissions',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthPermission',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=255)),
                ('codename', models.CharField(max_length=100)),
            ],
            options={
                'db_table': 'auth_permission',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthUser',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('password', models.CharField(max_length=128)),
                ('last_login', models.DateTimeField(blank=True, null=True)),
                ('is_superuser', models.BooleanField()),
                ('username', models.CharField(max_length=150, unique=True)),
                ('first_name', models.CharField(max_length=150)),
                ('last_name', models.CharField(max_length=150)),
                ('email', models.CharField(max_length=254)),
                ('is_staff', models.BooleanField()),
                ('is_active', models.BooleanField()),
                ('date_joined', models.DateTimeField()),
            ],
            options={
                'db_table': 'auth_user',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthUserGroups',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
            ],
            options={
                'db_table': 'auth_user_groups',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthUserUserPermissions',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
            ],
            options={
                'db_table': 'auth_user_user_permissions',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='DjangoAdminLog',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('action_time', models.DateTimeField()),
                ('object_id', models.TextField(blank=True, null=True)),
                ('object_repr', models.CharField(max_length=200)),
                ('action_flag', models.SmallIntegerField()),
                ('change_message', models.TextField()),
            ],
            options={
                'db_table': 'django_admin_log',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='DjangoContentType',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('app_label', models.CharField(max_length=100)),
                ('model', models.CharField(max_length=100)),
            ],
            options={
                'db_table': 'django_content_type',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='DjangoMigrations',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('app', models.CharField(max_length=255)),
                ('name', models.CharField(max_length=255)),
                ('applied', models.DateTimeField()),
            ],
            options={
                'db_table': 'django_migrations',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='DjangoSession',
            fields=[
                ('session_key', models.CharField(max_length=40, primary_key=True, serialize=False)),
                ('session_data', models.TextField()),
                ('expire_date', models.DateTimeField()),
            ],
            options={
                'db_table': 'django_session',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Poi',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('geom', django.contrib.gis.db.models.fields.PointField(blank=True, null=True, srid=4326)),
                ('osm_id', models.CharField(blank=True, max_length=254, null=True)),
                ('code', models.BigIntegerField(blank=True, null=True)),
                ('fclass', models.CharField(blank=True, max_length=254, null=True)),
                ('name', models.CharField(blank=True, max_length=254, null=True)),
            ],
            options={
                'db_table': 'poi',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Road',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('geom', django.contrib.gis.db.models.fields.MultiLineStringField(blank=True, null=True, srid=4326)),
                ('osm_id', models.CharField(blank=True, max_length=1, null=True)),
                ('highway', models.CharField(blank=True, max_length=1, null=True)),
                ('name_fr', models.CharField(blank=True, max_length=1, null=True)),
                ('ref', models.CharField(blank=True, max_length=1, null=True)),
            ],
            options={
                'db_table': 'road',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='TunAdm1',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('geom', django.contrib.gis.db.models.fields.MultiPolygonField(blank=True, null=True, srid=4326)),
                ('id_0', models.BigIntegerField(blank=True, null=True)),
                ('iso', models.CharField(blank=True, max_length=3, null=True)),
                ('name_0', models.CharField(blank=True, max_length=75, null=True)),
                ('id_1', models.BigIntegerField(blank=True, null=True)),
                ('name_1', models.CharField(blank=True, max_length=75, null=True)),
                ('type_1', models.CharField(blank=True, max_length=50, null=True)),
                ('engtype_1', models.CharField(blank=True, max_length=50, null=True)),
                ('nl_name_1', models.CharField(blank=True, max_length=50, null=True)),
                ('varname_1', models.CharField(blank=True, max_length=150, null=True)),
            ],
            options={
                'db_table': 'TUN_adm1',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='TunAdm2',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('geom', django.contrib.gis.db.models.fields.MultiPolygonField(blank=True, null=True, srid=4326)),
                ('id_0', models.BigIntegerField(blank=True, null=True)),
                ('iso', models.CharField(blank=True, max_length=3, null=True)),
                ('name_0', models.CharField(blank=True, max_length=75, null=True)),
                ('id_1', models.BigIntegerField(blank=True, null=True)),
                ('name_1', models.CharField(blank=True, max_length=75, null=True)),
                ('id_2', models.BigIntegerField(blank=True, null=True)),
                ('name_2', models.CharField(blank=True, max_length=75, null=True)),
                ('type_2', models.CharField(blank=True, max_length=50, null=True)),
                ('engtype_2', models.CharField(blank=True, max_length=50, null=True)),
                ('nl_name_2', models.CharField(blank=True, max_length=75, null=True)),
                ('varname_2', models.CharField(blank=True, max_length=150, null=True)),
            ],
            options={
                'db_table': 'TUN_adm2',
                'managed': False,
            },
        ),
        migrations.DeleteModel(
            name='Location',
        ),
    ]
