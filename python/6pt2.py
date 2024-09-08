numbers = []
n = int(input("Enter the number of elements: "))

for i in range(n):
    num = int(input("Enter a number: "))
    numbers.append(num)

positive_count = 0
negative_count = 0
zero_count = 0
odd_count = 0
even_count = 0
sum_of_numbers = 0

for num in numbers:
    if num > 0:
        positive_count += 1
    elif num < 0:
        negative_count += 1
    else:
        zero_count += 1

    if num % 2 == 0:
        even_count += 1
    else:
        odd_count += 1

    sum_of_numbers += num

print("Number of positive numbers:", positive_count)
print("Number of negative numbers:", negative_count)
print("Number of zeros:", zero_count)
print("Number of odd numbers:", odd_count)
print("Number of even numbers:", even_count)
print("Average of all numbers:", sum_of_numbers / n)
