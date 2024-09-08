numbers = []
for i in range(10):
    num = int(input("Enter number ? " + str(i+1) + ": "))
    numbers.append(num)

combinations = []
for i in range(len(numbers)):
    for j in range(i+1, len(numbers)):
        combinations.append((numbers[i], numbers[j]))

print("All combinations of picking two numbers from the 10: ", combinations)
