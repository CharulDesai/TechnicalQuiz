CREATE TABLE users (
    uid int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) UNIQUE
);


CREATE TABLE transactions (
    transID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    details varchar(300),
    debitAmt NUMERIC default 0,
    creditAmt NUMERIC default 0,
    insertedOn DATETIME DEFAULT CURRENT_TIMESTAMP,
    uid int NOT NULL,
    FOREIGN KEY (uid)
        REFERENCES users (uid)
        ON DELETE CASCADE
);

insert into users(name,email) VALUES("ABC","abc@gmail.com");
insert into users(name,email) VALUES("MNO","mno@gmail.com");

/*This will not work because of unique constraint*/
insert into users(name,email) VALUES("ABCD","abc@gmail.com");
/*This will not work because of unique constraint*/
insert into users(name,email) VALUES("ABCD","ABC@gmail.com");

insert into users(name,email) VALUES("XYZ","xyz@gmail.com");


insert into transactions(details,debitAmt,creditAmt,uid) values('test1',10,0,1);
insert into transactions(details,debitAmt,creditAmt,uid) values('test2',15,5,1);
insert into transactions(details,debitAmt,creditAmt,uid) values('test3',25,5,2);
insert into transactions(details,debitAmt,creditAmt,uid) values('test4',20,10,2);
insert into transactions(details,debitAmt,creditAmt,uid) values('test5',30,5,5);


/*This will delete data from users table and from transaction table as well for uid 2*/
delete from users where uid=2;