# -*- coding: utf-8 -*-
"""
Created on Sun Oct  3 11:51:34 2021

@author: Carlos
"""

import pyodbc 

server = 'localhost'
bd = 'Examen'
us = 'usuario324'
pas = '123456'


try:
    conn = pyodbc.connect('DRIVER={ODBC Driver 11 for SQL server}; SERVER='+server+';DATABASE='+bd+';UID='+us+';PWD='+pas)
    print("exito")
except Exception:
    print("fallo")
    

curInsertar = conn.cursor()

ci=input("ingrese ci: \n")
nomb=input("ingrese nombre completo: \n")
fec=input("ingrese fecha nac: \n")
dep=input("ingrese depatamento: \n")
usu=input("ingrese nombre de usuario: \n")
pas=input("ingrese password de usuario: \n")
tipo=input("ingrese tipo de usuario: \n")
car=input("ingrese carrera a la que pertenece: \n")

sql = "insert into usuario values ('{}','{}','{}','{}','{}')".format(ci,usu,pas,tipo,car)
sql1 = "insert into persona values ('{}','{}','{}','{}')".format(ci,nomb,fec,dep)
curInsertar.execute(sql)
curInsertar.execute(sql1)


curInsertar.commit()
curInsertar.close()