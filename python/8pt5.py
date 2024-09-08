def gcd_euclid(m, n):
    if m == 0:
        return n
    else:
        return gcd_euclid(n % m, m)

# Example usage:
num1 = int(input("Enter the first number: "))
num2 = int(input("Enter the second number: "))

result_gcd = gcd_euclid(num1, num2)
print(f"The GCD of {num1} and {num2} is: {result_gcd}")
