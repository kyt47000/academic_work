def calculate_simple_interest(P, R, T):
    interest = (P * R * T) / 100
    return interest

def calculate_compound_interest(P, R, T, n):
    amount = P * (1 + (R / (100 * n))) ** (n * T)
    interest = amount - P
    return interest

# Input values
P = float(input("Enter the principal amount (P) ? "))
R = float(input("Enter the rate of interest (R) ? "))
T = float(input("Enter the time period in years (T) ? "))
n = float(input("Enter the number of times interest is compounded per year (n) ? "))

print(f"Simple Interest: {calculate_simple_interest(P,R,T)}")
print(f"Compound Interest: {calculate_compound_interest(P,R,T,n)}")
