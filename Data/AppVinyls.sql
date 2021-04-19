create database AppVinyls;
use AppVinyls;

create table if not exists Vinyl( 

    artist varchar(30), 
    diskName varchar(30), 
    yearEdition int , 
    countryEdition varchar(30), 
    statusBox varchar(30), 
    statusDisk varchar(30), 
    diskFormat varchar(20), 
    gender varchar(30), 
    velocity varchar(30),
    observations varchar(140),
    image_path varchar(250)
);

drop database AppVinyls;
drop table Vinyl;
select * from Vinyl;


insert into Vinyl(artist, diskName, yearEdition, countryEdition, statusBox, statusDisk, diskFormat, gender, velocity, observations, image_path)
values ("queen", "bohemian rapsody", 1991, "onglaterra", "excelente", "excelente", "desconocido", "rock", "normal", "extra", "https://www.efeeme.com/wp-content/uploads/queen-20-02-15.jpg");
insert into Vinyl(artist, diskName, yearEdition, countryEdition, statusBox, statusDisk, diskFormat, gender, velocity,observations, image_path)
values ("acdc", "black in black", 2005, "estados unidos", "excelente", "bueno", "desconocido", "rock", "normal", "extra", "https://studiosol-a.akamaihd.net/uploadfile/letras/albuns/1/3/b/e/21801-tb_180.jpg");