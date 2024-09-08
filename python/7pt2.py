# Create two different sets with the data
set1 = {1, 2, 3, 4, 5}
set2 = {4, 5, 6, 7, 8}

# Print set items
print("Set 1:", set1)
print("Set 2:", set2)

# Add/remove items in/from a set
set1.add(6)
set2.remove(8)

# Perform operations on sets: union, intersection, difference, symmetric difference, check subset of another set
union_set = set1.union(set2)
intersection_set = set1.intersection(set2)
difference_set = set1.difference(set2)
symmetric_difference_set = set1.symmetric_difference(set2)
is_subset = set1.issubset(set2)

print("Union:", union_set)
print("Intersection:", intersection_set)
print("Difference:", difference_set)
print("Symmetric Difference:", symmetric_difference_set)
print("Is Set 1 a subset of Set 2?", is_subset)
