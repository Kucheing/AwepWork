db: books_db;
tbl: books;

-- The books table is named ‘books’
-- The table has columns for ‘id’, ‘title’, ‘author’, ‘genre’, ‘description’ and ‘price’.
create table books(
    id int auto_increment primary key,
    title varchar(100) NOT NULL,
    author varchar(100) NOT NULL,
    genre varchar(50) NOT NULL,
    description varchar(200) NOT NULL,
    price float NOT NULL
);

-- a) Write a SQL query of that will accomplish the following:
-- i. Retrieve all books from database.
SELECT * FROM books;  --this will show all the books in the table

--ii. Retrieve books from the database that match the user’s search criteria 
-- (title, author, or genre).

INSERT INTO books(title, body) Values ('Post One', 'This is Post One');

INSERT INTO books(title, body) Values ('Post Two', 'This is Post Two'), ('Post Three', 'This is Post Three'), ('Post Four', 'This is Post Four');

SELECT * FROM books;  --this will show all the books in the table

SELECT * FROM books WHERE id=2; --this will show the database with id 2

UPDATE books SET body='This is the udated post' WHERE id=2; --this will update the post with id 2
