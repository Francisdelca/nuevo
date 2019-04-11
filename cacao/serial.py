valor = 0
valor2 = 0
valor3 = 0
while 1:
    valor = valor + 1
    valor2 = valor2 + 2
    valor3 = valor3 + 3
    v = '' +str(int(valor))
    v2 = '' +str(int(valor2))
    v3 = '' +str(int(valor3))
    file = open('sensor.txt','w')
    file.write('{}\n{}\n{}'.format(v,v2,v3))
    file.close()
    print(valor)
