import sys
from sklearn.svm import SVC
import numpy as np
import csv

class startUpPredictions(object):
    def __init__(self):
        self.trainDataFile = "C:/xampp/htdocs/xampp/train.csv"
        self.trainLabelsFile = "C:/xampp/htdocs/xampp/trainoutput.csv"
        self.testDataFile = "C:/Users/rasag/Desktop/srija/test.csv"
        self.testLabelsFile = "C:/Users/rasag/Desktop/srija/testoutput.csv"
        self.categoryFile = "C:/xampp/htdocs/xampp/category.csv"
        self.stateFile = "C:/xampp/htdocs/xampp/state.csv"

    def getDict(self, filename):
        data_file = file(filename, 'r')
        data = csv.reader(data_file, delimiter = ',')
        
        categoryDict = {}
        for d in data:
            categoryDict[d[0]] = d[1]
        
        #print 'dict created.'
        return categoryDict


    def readData(self, filename):
        data_file = file(filename,'r')
        data = csv.reader(data_file,delimiter =',')
        values = []
        for row in data:
            value = []
            for i in range(9):
                value.append(float(row[i]))
            values.append(value)
        #print 'Data values reading completed ',filename
        return values


    def readLabels(self, filename):
        data_file = file(filename,'r')
        data = csv.reader(data_file,delimiter=',')
        values = []
        for row in data:
            values.append(row[0])
        #print 'Data labels reading completes ',filename
        return values

    def getClassifier(self):
        self.category = self.getDict(self.categoryFile)
        self.state = self.getDict(self.stateFile)
        self.trainData = self.readData(self.trainDataFile)
        self.trainLabels = self.readLabels(self.trainLabelsFile)
        #self.testData = self.readData(self.testDataFile)
        #self.testLabels = self.readLabels(self.testLabelsFile)
        
        self.classifier = SVC()

        X = np.asarray(self.trainData)
        Y = np.asarray(self.trainLabels, dtype="S6")
        self.classifier.fit(X, Y)
        return self.classifier

    def getAccuracy(self,actual_labels,predicted_labels):
        count = 0
        for i in range(len(actual_labels)):
            if(actual_labels[i] == predicted_labels[i]):
                count += 1
        accuracy = count * 100 / len(actual_labels)
        return accuracy

    def predictData(self, data):
       #data = [0,1,1,0,1,5,0.89,0.75,0]
        prediction = self.classifier.predict(data)
        print prediction

        ##accuracy
        #print "Accuracy: ", self.getAccuracy(self.testLabels, predictions)



if __name__ == "__main__":
    st = startUpPredictions()
    classifier = st.getClassifier()

    data = []
    for x in range(1,len(sys.argv)):
        data.append(sys.argv[x])

    
    st.predictData(data)
    
        
