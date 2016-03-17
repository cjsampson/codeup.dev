USE codeup_test_db;


SELECT album_name AS "All albums in the table:"
FROM albums;

SELECT album_name AS "All albums released before 1980:"
FROM albums
WHERE release_date < 1980;

SELECT album_name AS "All albums by Michael Jackson:"
FROM albums
WHERE artist = "Michael Jackson";

UPDATE albums
SET sales = sales * 10;
SELECT sales FROM albums;

UPDATE albums
SET release_date = FLOOR(RAND() * (1899 - 1800 + 1) + 1800)
WHERE release_date < 1980;
SELECT release_date FROM albums;

UPDATE albums
SET artist = "Peter Jackson"
WHERE artist = "Michael Jackson";
SELECT artist FROM albums WHERE artist = "Peter Jackson";