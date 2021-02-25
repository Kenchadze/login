CREATE TABLE  "USERS" 
   (	"USER_ID" NUMBER(11,0) NOT NULL ENABLE, 
	"USER_NAME" VARCHAR2(255), 
	"USER_LOGIN" VARCHAR2(255), 
	"EMAIL" VARCHAR2(255), 
	"PASSWORD" VARCHAR2(255), 
	 CONSTRAINT "USERS_PK" PRIMARY KEY ("USER_ID") ENABLE
   ) ;


CREATE OR REPLACE TRIGGER  "BI_USERS" 
  before insert on "USERS"               
  for each row  
begin   
  if :NEW."USER_ID" is null then 
    select "USERS_SEQ".nextval into :NEW."USER_ID" from dual; 
  end if; 
end; 

/
ALTER TRIGGER  "BI_USERS" ENABLE;


