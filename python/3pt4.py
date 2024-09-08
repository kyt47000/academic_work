
QUARTER_VALUE = 0.25
DIME_VALUE = 0.10
NICKEL_VALUE = 0.05
PENNY_VALUE = 0.01

quarters = int(input("Enter the number of quarters ? "))
dimes = int(input("Enter the number of dimes ? "))
nickels = int(input("Enter the number of nickels ? "))
pennies = int(input("Enter the number of pennies ? "))

total_value = (quarters * QUARTER_VALUE) + (dimes * DIME_VALUE) + (nickels * NICKEL_VALUE) + (pennies * PENNY_VALUE)

print(f"The total value of change is ${total_value:.2f}")
