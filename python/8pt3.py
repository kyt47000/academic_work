def fibonacci(n):
    if n <= 0:
        return []
    elif n == 1:
        return [1]
    elif n == 2:
        return [1, 1]
    else:
        fib_sequence = fibonacci(n - 1)
        fib_sequence.append(fib_sequence[-1] + fib_sequence[-2])
        return fib_sequence

# Example usage:
n = 10
fib_sequence = fibonacci(n)

print(f"Fibonacci Sequence up to {n} numbers:")
print(fib_sequence)
