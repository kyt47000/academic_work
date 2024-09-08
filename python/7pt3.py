# Create a dictionary
my_dict = {}

# Print dictionary items
print(my_dict)

# Add/remove key-value pair in/from a dictionary
my_dict["key"] = "value"
del my_dict["key"]

# Check whether a key exists in a dictionary
if "key" in my_dict:
    print("Key exists")
else:
    print("Key does not exist")

# Iterate through a dictionary
for key, value in my_dict.items():
    print(key, value)

# Concatenate multiple dictionaries
dict1 = {"key1": "value1"}
dict2 = {"key2": "value2"}
dict3 = {"key3": "value3"}

concatenated_dict = {**dict1, **dict2, **dict3}
print(concatenated_dict)
