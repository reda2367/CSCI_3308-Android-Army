Drop table phone;
Drop table manufacturer;
Drop table version;

Create table phone(id integer primary key, manufacturer char(50), make char(50), version char(50), OSRelease char(50), security char(50));
Create table manufacturer(id integer primary key, manufacturer char(50), make char(50), version char(50), OSRelease char(50), security char(50));
Create table version(id integer primary key, name char(50), versionID char(50));

insert into phone(id, manufacturer, make, version, OSRelease, security) values
(1, 'Samsung', 'Galaxy S8+', '7.0 Nougat','08-2016','08-2017'),
(2,  'Samsung', 'Galaxy J3', '6.0.1 Marshmallow', '08-2017', '08-2017'),
(3,  'Samsung', 'Galaxy S6 Active', '7.0 Nougat', '08-2016', '08-2017'),
(4,  'OnePlus', '2', '6.0.1 Marshmallow', '05-2016','06-2017'),
(5,  'Google', 'Pixel 2', '6.0.0 Oreo', '10-2016','10-2017');

insert into manufacturer(id, manufacturer, make, version, OSRelease, security) values
(1, 'Samsung', 'Galaxy S8+', '7.0 Nougat','08-2016','08-2017'),
(2,  'Samsung', 'Galaxy J3', '6.0.1 Marshmallow', '08-2017', '08-2017'),
(3,  'Samsung', 'Galaxy S6 Active', '7.0 Nougat', '08-2016', '08-2017'),
(4,  'OnePlus', '2', '6.0.1 Marshmallow', '05-2016','06-2017'),
(5,  'Google', 'Pixel 2', '6.0.0 Oreo', '10-2016','10-2017');

insert into version(id, version_name) values
(1, 'Lollipop 5.0'), 
(2, 'Marshmallow 6.0'), 
(3, 'Nougat 7.0'),
(4, 'Nougat 7.1'), 
(5, 'Oreo 8.0'),
(6, 'Oreo 8.1');

