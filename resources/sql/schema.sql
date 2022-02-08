create database cinema;

use cinema;

create table movie (
   mid int(10) unsigned not null auto_increment,
   mtitle varchar(255) not null default '',
   myear int not null ,
   primary key (mid)
   ) ENGINE = InnoDB;

create table person (
   pid int(10) unsigned not null auto_increment,
   pname varchar(255) not null default '',
   psex enum('M','F') not null default 'M',
   pdob date not null,
   primary key (pid)
   ) ENGINE = InnoDB;

create table role (
   mid int(10) unsigned not null default '0',
   pid int(10) unsigned not null default '0',
   part varchar(10) not null default 'A',
   foreign key (mid) references movie (mid),
   foreign key (pid) references person (pid),
   primary key (mid,pid)
   ) ENGINE = InnoDB;

