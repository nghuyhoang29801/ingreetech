
DELIMITER $$


-------------------------------------------
-- table: caNhan
-- them ca nhan moi
DROP PROCEDURE IF EXISTS crm.insert_new_record_on_CaNhan;
CREATE PROCEDURE crm.insert_new_record_on_CaNhan(maCaNhan int, hoTen varchar, maLoaiGiayToTuyThan int, ngayCap timestamp, noiCap varchar, lienKetAnhGiayTo varchar)
BEGIN
    INSERT INTO CaNhan (MaCaNhan, HoTen, MaLoaiGiayToTuyThan, NgayCap, NoiCap, LienKetAnhGiayTo)
    VALUES (maCaNhan, hoTen, maLoaiGiayToTuyThan, ngayCap, noiCap, lienKetAnhGiayTo);
END


------------------------------------------