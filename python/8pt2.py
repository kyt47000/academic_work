def remove_duplicates(input_list):
    unique_list = []
    
    for item in input_list:
        if item not in unique_list:
            unique_list.append(item)
    
    return unique_list

# Example usage:
original_list = [1, 2, 3, 4, 2, 5, 6, 3, 7, 8, 1, 9, 10, 10]
print("Original List:", original_list)

unique_list = remove_duplicates(original_list)
print("List with Duplicates Removed:", unique_list)
