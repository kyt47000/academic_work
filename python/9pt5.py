import matplotlib.pyplot as plt
import numpy as np

# Generate random test scores for 100 students between 0 and 10
np.random.seed(42)  # Setting seed for reproducibility
test_scores = np.random.uniform(0, 10, 100)

# Plot the histogram
plt.hist(test_scores, bins=10, range=(0, 10), edgecolor='black')
plt.title('Histogram of Test Scores')
plt.xlabel('Test Scores')
plt.ylabel('Number of Students')
plt.grid(axis='y', alpha=0.75)
plt.show()
