use class;

-- 1. crate a table

-- create table product(product_id varchar(10) primary key, product_name varchar(30) not null,product_category varchar(40) not null,product_price decimal(7,2) not null,quantity int check(quantity>0));

-- 2. insert five products in the table
-- insert into product values ("p1","book","general",700.99,400),("p2","notebook","general",400.20,200),("p3","laptop","electronics",25000.00,20),("p4","chair","furniture",5000.00,20),("p5","board","general",2000.00,20);


-- 3. find number of categories from product gallery
select count(product_category),product_category from product group by product_category;
select Count(distinct product_category) from product;

-- 4. count the number of products where quantity is zero
select count(quantity),quantity from product group by quantity having quantity<100;

-- 5 . count number of products from furniture categories
select count(product_category),product_category from product group by product_category having product_category="general"; 

-- 6. count number poff products in general and electronics section







-- stored procedure



insert into product values ("p6","practical","general",2000,100);

delimiter //
create procedure employee_details()
begin
select * from product;
end //

delimiter ;




-- store a variable  in procedures here maxprice is a variable

delimiter //
create procedure class_procedure()
begin
	declare maxprice int default 0;
    select max(product_price) into maxprice from product;
    select maxprice;

end //
delimiter ;


-- create a procedure where we will pass a parameter in IN method

delimiter //
create procedure get_price
(
in item_name varchar(30)
)
begin
select * from product where product_name = item_name;
end//
delimiter ;

call get_price('notebook');

-- create a procedure where we will pass a parameter IN, OUT method . here we want something

delimiter //
create procedure get_quantity(in p_cat varchar(20), out p_qty int )
begin
select sum(quantity) into p_qty from product where product_category = p_cat;
end//
delimiter ;

call get_quantity('general',@p_qty);

-- getting the value of a data stored in variable

select @p_qty;