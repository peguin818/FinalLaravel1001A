create database T2LEGOShop;

use T2LEGOShop;

create table users (
	usrID int auto_increment primary key unique,
    usrUsername varchar(30),
    usrPassword varchar(30),
    usrFirstName varchar(30),
    usrLastName varchar(30),
    usrTel varchar(10),
    usrAddr varchar(3000)
);

create table admins (
	admID int auto_increment primary key unique,
    admUsername varchar(30),
    admPassword varchar(30),
    admFirstName varchar(30),
    admLastName varchar(30),
    admTel varchar(10)
);

create table themes (
	themeID int auto_increment primary key unique,
    themeName varchar(300),
    themeDetail varchar(10000)
);

create table products (
	prdID bigint primary key unique,
    prdName varchar(300),
    prdPrice double,
    prdDetail varchar(10000),
    prdImage1 varchar (300),
    prdImage2 varchar (300),
    prdImage3 varchar (300),
    themeID int not null,
    constraint foreign key (themeID) references themes(themeID) 
);

create table orders (
	orderID bigint auto_increment primary key unique not null,
    usrID int not null,
    constraint foreign key (usrID) references users(usrID)
    
);

create table orderDetails (
	ordDetailID bigint auto_increment primary key unique not null,
    orderID bigint not null,
    constraint foreign key (orderID) references orders(orderID),
    prdID bigint not null,
    constraint foreign key (prdID) references products(prdID)
);