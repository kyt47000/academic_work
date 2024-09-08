weight = float(input("Enter your weight in kg ? "))
height = float(input("Enter your height in cm ? "))

height = height / 100

# Calculate BMI
bmi = weight / (height ** 2)

if bmi < 19:
    print("You are underweight.")
elif bmi <= 25:
    print("You are healthy.")
else:
    print("You are overweight.")
