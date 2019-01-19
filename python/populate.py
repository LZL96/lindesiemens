import mysql.connector


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database = "hackathon"
)

mycursor = mydb.cursor()

print(mycursor)
data = []
with open("data.csv") as f:
  for line in f:
    data.append(line.strip().split(","))

for d in data:
  sql = "INSERT INTO record (operator_name, description,points) VALUES (%s, %s, %s)"
  # sql = "select * from record"
  val = tuple(d)
  mycursor.execute(sql,val)
  # myresult = mycursor.fetchall()
  mydb.commit()

  print(mycursor.rowcount, "record inserted.")


