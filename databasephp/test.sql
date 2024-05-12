db: blog
tbl: posts;

create table posts(
    id int auto_increment primary key,
    title varchar(100) NOT NULL,
    body text NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts(title, body) Values ('Post One', 'This is Post One');

INSERT INTO posts(title, body) Values ('Post Two', 'This is Post Two'), ('Post Three', 'This is Post Three'), ('Post Four', 'This is Post Four');

SELECT * FROM posts;  --this will show all the posts in the table

SELECT * FROM posts WHERE id=2; --this will show the database with id 2

UPDATE posts SET body='This is the udated post' WHERE id=2; --this will update the post with id 2
