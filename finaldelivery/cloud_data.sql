use MIAAS;
INSERT INTO users VALUES(10128742);

INSERT INTO targets VALUES(1,"Android-2.2");
INSERT INTO targets VALUES(2,"Android-2.3.3");

INSERT INTO flavors VALUES('std_vm',1,512,10);
INSERT INTO flavors VALUES('std_emu',1,256,0.2);

INSERT INTO clouds VALUES(1,'192.168.1.77');
INSERT INTO clouds VALUES(2,'192.168.1.122');

INSERT INTO nodes VALUES(1,1,4,5800,100);
INSERT INTO nodes VALUES(1,2,4,5800,100);
INSERT INTO nodes VALUES(2,1,4,5800,100);

INSERT INTO vms VALUES(1,1,'VM001C01N01',1,1024,10,1);
INSERT INTO vms VALUES(1,1,'VM002C01N01',1,1024,10,1);
INSERT INTO vms VALUES(1,1,'VM003C01N01',1,1024,10,1);