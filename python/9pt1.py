import math

def calculate_mean(numbers):
    if not numbers:
        return None
    return sum(numbers) / len(numbers)

def calculate_deviation(numbers, mean):
    if not numbers or mean is None:
        return None
    deviation_sum = sum((x - mean) ** 2 for x in numbers)
    return math.sqrt(deviation_sum / (len(numbers) - 1))

# Example usage:
numbers = [2, 4, 4, 4, 5, 5, 7, 9]

mean_value = calculate_mean(numbers)
deviation_value = calculate_deviation(numbers, mean_value)

print("Numbers:", numbers)
print("Mean:", mean_value)
print("Standard Deviation:", deviation_value)
