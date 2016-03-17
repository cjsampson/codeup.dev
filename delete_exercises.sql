USE codeup_test_db;

-- SELECT album_name AS 'Albums released after 1991:', release_date
-- FROM albums 
-- WHERE release_date >= 1991;

-- SELECT album_name AS 'Albums with the genre Disco:'
-- FROM albums
-- WHERE genre = 'disco';

-- SELECT album_name AS 'Albums by Whitney Houston:', artist
-- FROM albums 
-- WHERE artist = 'Whitney Houston';

FROM albums 
WHERE release_date >= 1991;

FROM albums
WHERE genre = 'disco';

FROM albums 
WHERE artist = 'Whitney Houston';

