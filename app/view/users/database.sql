
#create database query
create database if not exists sunway;

#create users table query
create table users (
    user_id  varchar(255)  primary key unique not null,
    user_name varchar(20) unique not null,
    email varchar(100) unique not null,
    password varchar(255) not null,
    user_type varchar(50) not null
);

#create users_records table query
create table users_records(
    user_records_id varchar(255) primary key unique not null,
    user_id varchar(255) not null,
    f_name varchar(150) not null,
    l_name varchar(150) not null,
    gender varchar(50) not null,
    date_of_birth date not null,
    contact_no varchar(50) not null,
    father_name varchar(150) not null,
    mother_name varchar(150) not null,
    address varchar(150) not null,
    about text not null,
    foreign key(user_id) references users(user_id)
);

#create teacher table query
    create table teacher(
    teacher_id varchar(255) primary key unique not null,
    user_records_id varchar(255) not null,
    join_date date not null,
    department varchar(50) not null,
    foreign key(user_records_id) references users_records(user_records_id)
);

#create student table query
create table student(
    student_id varchar(255) primary key unique not null,
    user_records_id varchar(255) not null,
    father_occupation varchar(100) not null,
    admission_date date not null,
    intake date not null,
    faculty varchar(100) not null,
    foreign key(user_records_id) references users_records(user_records_id)
);

#create material table query
create table material(
    material_id varchar(255) primary key unique not null,
    teacher_id varchar(255) not null,
    title varchar(255) not null,
    description text not null,
    foreign key(teacher_id) references teacher(teacher_id)
);

#create notification table query
create table notification(
    notification_id varchar(255) primary key unique not null,
    material_id varchar(255) not null,
    title varchar(255) not null,
    message text not null,
    foreign key(material_id) references material(material_id)
);

