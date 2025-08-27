create table orders
(
    id            int primary key auto_increment,
    name          varchar(255),
    phone         varchar(255),
    entry_count   int,
    day_count     int,
    accommodation boolean,
    transportasi  boolean,
    service_food  boolean,
    packet_price  int,
    total_price   int
);

alter table orders
    add column created_at datetime;
alter table orders
    modify column created_at varchar(50);


desc orders
