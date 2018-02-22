<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$MaxData = 30;
    	while ($MaxData>0) 
    	{
	    	  DB::table('Products')->insert([
	            'name' => str_random(10),
	            'price' => random_int(1, 100)
	        ]);

    	  $MaxData--;
    	}
        
    }
}


/*



DROP TABLE IF EXISTS PARENTS;
DROP TABLE IF EXISTS CHILDREN;
DROP TABLE IF EXISTS CHILDREN_PARENT;


create table IF NOT EXISTS parents
(
	id int primary key auto_increment,
    name varchar(100) not null,
    age int not null
);


create table IF NOT EXISTS children
(
	id int primary key auto_increment,
    name varchar(100) not null,
    age int not null
);




create table children_parent
(
	id int primary key auto_increment,
    child_id int not null,
    parent_id int not null ,  
    
    FOREIGN KEY (child_id)  REFERENCES children(id)
	ON DELETE CASCADE,
    
    FOREIGN KEY (parent_id) REFERENCES parents(id)
    ON DELETE CASCADE
);





insert into children(`name`,`age`) values ('aden', 10);
insert into children(`name`,`age`) values ('abdi', 10);
insert into children(`name`,`age`) values ('james', 10);
insert into children(`name`,`age`) values ('nur', 10);





insert into parents(`name`,`age`) values ('Ali', 52);
insert into parents(`name`,`age`) values ('hassan', 38);
insert into parents(`name`,`age`) values ('Fareh', 42);
insert into parents(`name`,`age`) values ('daarood', 30);
insert into parents(`name`,`age`) values ('fahima', 30);





insert into children_parent(`child_id`,`parent_id`) values (1,2);
insert into children_parent(`child_id`,`parent_id`) values (2,2);


insert into children_parent(`child_id`,`parent_id`) values (1,2);
insert into children_parent(`child_id`,`parent_id`) values (2,2);


-- get all the kids of parent hassan - id = 2


select c.name from parents p
inner join children_parent cp
on p.id = cp.parent_id
inner join children c
on c.id =  cp.child_id


-- get the parent names of particular child

select p.name as parent_name, c.name as child_name from parents p
inner join children_parent cp
on cp.parent_id = p.id
inner join children c
on c.id =  cp.child_id
where cp.child_id in (1,2)
group by p.name

 

*/