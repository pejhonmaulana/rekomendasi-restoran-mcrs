SELECT 
    tb_alternatif.id_alternatif, 
    AVG(tb_rating.C1 + tb_training.C1) AS rata_C1, 
    AVG(tb_rating.C2 + tb_training.C2) AS rata_C2, 
    AVG(tb_rating.C3 + tb_training.C3) AS rata_C3,
    AVG(tb_rating.C4 + tb_training.C4) AS rata_C4,
    AVG(tb_rating.C5 + tb_training.C5) AS rata_C5,
    AVG(tb_rating.C6 + tb_training.C6) AS rata_C6,
    AVG(tb_rating.R0 + tb_training.R0) AS rata_R0,
FROM user 
JOIN tb_rating ON tb_alternatif.id_alternatif = tb_rating.id_alternatif 
JOIN tb_training ON tb_alternatif.id_alternatif = tb_training.id_alternatif 
GROUP BY tb_alternatif.id_alternatif;

SELECT AVG(C1) as rata_C1, AVG(C2) as rata_C2,
AVG(C3) as rata_C3, AVG(c4) as rata_c4, AVG(C5) as rata_C5, AVG(C6) as rata_C6, AVG(R0) as rata_R0
FROM tb_rating
UNION
SELECT AVG(C1) as rata_C1, AVG(C2) as rata_C2,
AVG(C3) as rata_C3, AVG(c4) as rata_c4, AVG(C5) as rata_C5, AVG(C6) as rata_C6, AVG(R0) as rata_R0
FROM tb_training;