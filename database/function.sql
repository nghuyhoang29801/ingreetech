-- FUNCTION CHO CRM DATABASE


--------------------------------------------------
-- table: caNhan
-----------

-- function lay thong tin ca nhan theo MaCaNhan
DROP FUNCTION IF EXISTS crm.get_caNhan_by_id;
CREATE FUNCTION crm.get_caNhan_by_id(id int)
RETURNS TABLE
AS
    RETURN (SELECT * FROM caNhan WHERE MaCaNhan = id)

--------------------------------------------------