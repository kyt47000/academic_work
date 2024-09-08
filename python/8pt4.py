def is_prime(n):
    if n <= 1:
        return False
    elif n == 2:
        return True
    elif n % 2 == 0:
        return False
    else:
        # Check for factors up to the square root of n
        for i in range(3, int(n**0.5) + 1, 2):
            if n % i == 0:
                return False
        return True

# Example usage:
num = int(input("Enter a number to check for primality: "))

if is_prime(num):
    print(f"{num} is a prime number.")
else:
    print(f"{num} is not a prime number.")
