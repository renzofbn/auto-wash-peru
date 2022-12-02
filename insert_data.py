import mysql.connector

HOST = input("\033[96m[+]Host: \033[0m")
USER = input("\033[96m[+]Usuario: \033[0m")
PASS = input("\033[96m[+]Contraseña: (dejar en blanco si no hay) \033[0m")

try:
  mydb = mysql.connector.connect(
    host=HOST,
    user=USER,
    password=PASS,
  )
except:
  print("\033[91m[-]Error de conexión\033[0m")
  exit()

print("\n\033[92m[+]Conectado Exitosamente\033[0m")

mycursor = mydb.cursor()
mycursor.execute("SHOW DATABASES")
print("\033[93m[+]Lista de base de datos:\033[0m")
print("----------------------------")
for database in mycursor:
  print("\033[95m[*]" + str(database).replace("('", "").replace("',)", ""))
print("\033[0m----------------------------")

try:
  DB = input("\033[96m[+]Base de datos a usar: \033[0m")
  mycursor.execute("USE " + DB)
except:
  print("\033[91m[-]No se encontro la base de datos\033[0m")
  exit()

print(f"\033[92m[+]Conectado exitosamente con {DB}\033[0m")

while True:
  try:
    todo = input("\033[96m[+]Que hacer [c]omand [s]cript: \033[0m")
    if todo.upper() in ["C", "S"]:
      break
  except:
    pass

if todo.upper() == "C":
  try:
    command = input("\033[96m[+]Comando: \033[0m")
    mycursor.execute(command)
    mydb.commit()
    print("\033[92m[+]Comando ejecutado con exito \033[0m")
  except:
    print("\033[91m[-]Error al ejecutar el comando\033[0m")
    exit()

if todo.upper() == "S":
    script_path = input("\033[96m[+]Ruta del script: \033[0m")
    print("\033[93m[+]Ejecutando script...\033[0m")
    with open(script_path, "r", encoding="utf8") as f:
      sql = f.read()
    mycursor.execute(sql, multi=True)
    print("\033[92m[+]Script ejecutado con exito \033[0m")
    print(mycursor.fetchall())

