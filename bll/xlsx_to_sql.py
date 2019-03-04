from pandas import DataFrame, read_csv
import matplotlib.pyplot as plt
import pandas as pd 
 
file = r'Index.xlsx'
df = pd.read_excel(file)
i = len(df['Name'])
# print(df['Name'][8])
sql = ""
for id in range(i):
	sql += "INSERT INTO `contents`(`id`, `SuraID`, `Name`,`English`) VALUES ('',"+str(df['Number'][id])+",'"+df['Name'][id]+"','"+df['English'][id]+"');\n"

file = open('Index.sql','a')
file.write(sql)
print(sql)