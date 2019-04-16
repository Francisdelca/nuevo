from random import *
temperatura = [10,15,20,25,30,35,40,45,50,55,60]
humedad = [10,12,15,20,22,25,30,32,35,40,45,50,55,60,80]
ph = [-10,-9,-8,-7,-6,-5,-4,-3,-2,-1,0,1,2,3,4,5,6,7,8,9,10]
while 1:
    shuffle(temperatura)
    shuffle(humedad)
    shuffle(ph)
    t = '' + str (int (temperatura[0]))
    h = '' + str (int (humedad[0]))
    p = '' + str (int (ph[0]))
    file = open('sensor.txt','w')
    file.write('{}\n{}\n{}'.format(t, h, p))
    file.close()
    print(temperatura[0])


