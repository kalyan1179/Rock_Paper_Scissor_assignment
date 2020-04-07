
import random as r
score = [0]*4
names = {0:"A",1:"B",2:"C",3:"D"}
d = {0:"Rock",1:"Paper",2:"Scissor"}
i = 1
while i<51:
	choice = []
	choice.append(r.randint(0,2))
	choice.append(r.randint(0,2))
	choice.append(r.randint(0,2))
	choice.append(r.randint(0,2))
	print("Round ",str(i),": ")
	print("\t\t",end="")	
	for j in range(4):
		print(str(names[j]),": ",str(d[choice[j]]),end="\n\t\t")
	print("\n\t\t",end="")
	x = choice	
	choice = list(set(choice))
	if len(choice)==3:
		print("No Result")
	elif len(choice) == 1:
		print("Tie")
	else:
		print("Won:",end=" ")
		index = -1
		if 0 in choice and 1 in choice:
			index = 1
		if 2 in choice and 1 in choice:
			index = 2
		if 0 in choice and 2 in choice:
			index = 0
		for j in range(len(x)):
			if index == x[j]:
				score[j]+=1
				print(names[j], end=" ")
	print(" ")
	i+=1
print("Results: ")
for i in range(4):
	print("\t\t",str(names[i]),": ",str(score[i]))