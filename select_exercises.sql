USE codeup_test_db;


 -- albums(artist, album_name, release_date, sales, genre) 

SELECT 'All of Pink Floyd\'s albums' AS 'output';
SELECT album_name FROM albums WHERE artist = 'Pink Floyd';

SELECT 'The year Sgt. Pepper\'s Lonely Hearts was released' AS 'output';
SELECT release_date FROM albums WHERE album_name LIKE 'Sgt%';

SELECT 'The genre of the album Nevermind' AS 'output';
SELECT genre FROM albums WHERE album_name = 'Nevermind';

SELECT 'The albums released between 1990 and 2000';
SELECT album_name FROM albums WHERE release_date BETWEEN 1990 AND 2000;

SELECT 'Albums that had less than 20 million in certified sales' AS 'output',
SELECT album_name FROM albums WHERE sales <= 20.0;

SELECT 'Albums in the Rock genre' AS 'output',
SELECT album_name FROM albums WHERE genre = 'Rock';