# -*- coding: utf-8 -*-
"""
Created on Sun Oct  3 10:56:38 2021

@author: Carlos
"""

import pymysql
import os

class App:
    
    def __init__(self):
        self.conn = pymysql.connect(
            host='localhost',
            user='root',
            password='123456',
            db='BDCARLOS'
            )
        self.cursor = self.conn.cursor()
        
    def Insertar(self):
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
        self.cursor.execute(sql)
        self.cursor.execute(sql1)
        print("correcto")
        self.conn.commit()
        os.system('pause')
        
aplication=App()
aplication.Insertar()
        