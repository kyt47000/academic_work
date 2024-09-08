import random

def shuffle(input_list):
    shuffled_list = input_list.copy()
    random.shuffle(shuffled_list)
    return shuffled_list

# Example usage:
original_list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
print("Original List:", original_list)

shuffled_list = shuffle(original_list)
print("Shuffled List:", shuffled_list)
