n = int(input("Enter the number of elements to be in the list ? "))
a = []
for i in range(0, n):
    element = int(input("Enter element " + str(i+1) + " ? "))
    a.append(element)
avg = sum(a) / n
print("Average of elements in the list", round(avg, 2))
