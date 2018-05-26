#!C:\Users\ramu\AppData\Local\Programs\Python\Python36-32 python
import urllib.request
import numpy as np
import numpy.linalg as la
import matplotlib as mp
import matplotlib.pyplot as plt
from PIL import Image, ImageChops

print("Hello123")
f = urllib.request.urlopen("http://2neatmagazines.com/Life-Magazine-Covers/1969/Life-Magazine-1969-08-11.jpg")
LIFE = plt.imread(f, format="jpg")
print("Hello123")
def photoshop_detector(img):
    rows, cols, colors = img.shape
    flattened = img.reshape((-1, colors)) # flatten rows and cols into a single dimension
    # PCA is just the SVD of the covariance matrix
    U, S, V = la.svd(np.cov(flattened.T))

    PC2 = U[:,1] # 2nd principle component
    projected = np.dot(flattened,PC2)
    return np.reshape( projected, (rows,cols)) # unflatten
print("Hello123")
plt.imshow(photoshop_detector(LIFE), cmap = mp.cm.Greys_r)
plt.show()
print("Hello123")